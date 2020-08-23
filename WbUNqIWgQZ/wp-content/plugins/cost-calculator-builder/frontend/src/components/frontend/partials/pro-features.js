import payment from "./payment";
import wooCommerce from "./wooCommerce";
import calcForm from "./calc-form";

export default  {

    data: () =>  ({
    }),

    components: {
        'calc-form': calcForm,
        'calc-payments': payment,
        'calc-woo' : wooCommerce,
    },
}