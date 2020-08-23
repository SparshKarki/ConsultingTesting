export default {
    install(Vue) {
        Vue.prototype.$checkUri = parameterName => {

            let result = '', temp = [];
            const uri = location.search.substr(1).split("&");

            for (let index = 0; index < uri.length; index++) {
                temp = uri[index].split("=");
                if (temp[0] === parameterName)
                    result = decodeURIComponent(temp[1]);
            }

            return result;
        }
    }
}