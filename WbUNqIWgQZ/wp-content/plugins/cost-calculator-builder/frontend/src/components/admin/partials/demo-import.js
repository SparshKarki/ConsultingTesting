export default {
    data: () => ({
        demoImport: {
            // Custom demo import
            image: {
                file: null
            },
            files: null,
            file: null,
            custom: false,
            noFile: 'No file chosen',

            // Default demo import
            load:true,
            progress_load:false,
            progress:0,
            step_progress: null,
            step:[],
            info: {
                "calculators": 0,
            },
            info_progress: [],
            finish: false,
            progress_data: ""
        },
    }),

    mounted() {
        this.getImportData();
    },

    methods: {
        applyImporter: function() {
            let vm = this;
            let demo = vm.demoImport;
            demo.file = document.querySelector('#ccb-file');
            demo.file.click();
        },

        loadImage: function () {
            let vm = this;
            let demo = vm.demoImport;

            if(demo.file.value)
                demo.noFile = demo.file.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
            else
                demo.noFile = 'No file chosen';

            let fileToUpload = vm.$refs['image-file'].files[0];

            if (fileToUpload) {
                demo.files = fileToUpload;
            }
        },

        async importNewLayout(){
            const vm = this;
            let demo = vm.demoImport;

            if( demo.files ){
                const formData = new FormData();
                formData.append('action', 'custom-demo-import');
                formData.append('type', 'single');
                formData.append('file', demo.files);

               demo.image.message = '';
               console.log(window.ajax_window);

               await fetch( ajax_window.ajax_url ,{
                   method: 'POST',
                   body: formData
               })
                   .then(response => response.json())
                   .then(response => {
                       console.log(response);
                       console.log('work');
                    if( response.success ) {
                        demo.files = null;
                        demo.noFile = 'No file chosen';
                        demo.image.file = '';
                        demo.info = response.message;

                        for(let index in demo.info)
                            demo.info_progress[index] = 0;

                        demo.custom = true;
                        vm.importDemos();
                    }
                });
            }
        },

        async getImportData() {
            const vm = this;
            vm.demoImport.load = true;

            console.log(window.ajax_window);

            await fetch( ajax_window.ajax_url , {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
                },
                body: `action=demo-import`,
            })
                .then(response => response.json())
                .then(response => {
                    vm.demoImport.load = false;
                    vm.demoImport.info = response;
                    for(let index in vm.demoImport.info)
                        vm.demoImport.info_progress[index] = 0;
                });
        },

        importDemos(){
            const vm = this;
            vm.demoImport.progress_load = true;
            vm.demoImport.step = Object.keys(vm.demoImport.info);
            vm.demoImport.step_progress = vm.demoImport.step[0];

            vm.progressImport();
        },

        async progressImport(){
            let vm = this;
            let demo = vm.demoImport;
            let params = {
                step: demo.step_progress,
                key: demo.info_progress[demo.step_progress]
            };

            if(demo.custom)
                params['is_custom_import'] = true;

            fetch( ajax_window.ajax_url , {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
                },
                body: `action=demo-import-run&data=` +  encodeURIComponent(JSON.stringify(params)),
            })
                .then(response => response.json())
                .then(response => {
                demo.progress_data += response.data+" \n ";
                let textarea = document.querySelector('#progress_data_textarea');
                textarea.scrollTop = textarea.scrollHeight;
                if(demo.info[demo.step_progress] > demo.info_progress[demo.step_progress]) {
                    demo.info_progress[demo.step_progress] = response.key;
                    demo.progress = Math.ceil( (response.key / demo.info[demo.step_progress]) * 100 );
                }

                if(demo.info[demo.step_progress] === demo.info_progress[demo.step_progress]) {
                    demo.step_progress = vm.nextKey(demo.info, demo.step_progress);
                    demo.progress = 0;
                    this.$store.commit('updateIsExisting', true);
                    this.$store.commit('setExisting', response.existing);
                }

                if(demo.step_progress != null && response.success){
                    vm.progressImport();
                }

                if(demo.step_progress == null){
                    demo.finish = true;
                    demo.progress_load = false;
                }
            });
        },

        nextKey: function(db, key) {
            let keys = Object.keys(db), i = keys.indexOf(key); i++;
            if(typeof keys[i] != "undefined")
                return keys[i];
            return null;
        },
    }
}