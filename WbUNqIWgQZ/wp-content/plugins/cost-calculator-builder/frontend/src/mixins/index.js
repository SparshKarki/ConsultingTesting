export default {
    methods: {
        parseComponentData() {
            if (typeof this.field === 'string' && typeof this.field !== "undefined") {
                return JSON.parse(this.field);

            } else if (typeof this.field !== 'undefined' && this.field.alias) {
                return this.field;
            }
        },

        randomID: function () {
            return '_' + Math.random().toString(36).substr(2, 9);
        },

        currencyFormat(amount, element, currencySettings = {}) {

            if(!element.currency)
                return amount;

            try {
                if(Object.keys(currencySettings).length) {

                    let decimalCount = currencySettings.num_after_integer
                        ? currencySettings.num_after_integer
                        : 2;

                    let decimal = currencySettings.decimal_separator
                        ? currencySettings.decimal_separator
                        : '.';

                    let thousands = currencySettings.thousands_separator
                        ? currencySettings.thousands_separator
                        : ',';

                    decimalCount = Math.abs(decimalCount);
                    decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

                    const negativeSign = amount < 0 ? "-" : "";
                    amount = parseFloat(amount);
                    let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
                    let j = (i.length > 3) ? i.length % 3 : 0;

                    amount = negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");

                    currencySettings.currency = currencySettings.currency
                        ? currencySettings.currency
                        : '';

                    if(currencySettings.currencyPosition === 'left'){
                        amount = currencySettings.currency + amount;
                    }

                    if(currencySettings.currencyPosition === 'right'){
                        amount = amount + currencySettings.currency;
                    }

                    if(currencySettings.currencyPosition === 'left_with_space'){
                        amount = currencySettings.currency + ' ' + amount;
                    }

                    if(currencySettings.currencyPosition === 'right_with_space'){
                        amount = amount + ' ' + currencySettings.currency;
                    }
                }

                return amount;
            } catch (e) {
                console.log(e)
            }
        },

        hexToRgbA(hex, opacity = 1) {
            let c;
            if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
                c = hex.substring(1).split('');
                if (c.length == 3) {
                    c = [c[0], c[0], c[1], c[1], c[2], c[2]];
                }
                c = '0x' + c.join('');
                return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + opacity + ')';
            }

            console.log('Bad Hex');
        },
    },
}