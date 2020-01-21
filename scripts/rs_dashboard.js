/**
 Company: RSC BYTE LTD
 Author: Revelation, A.F
 Email: nusktecsoft@gmail.com
 website: rscbyte.com
 **/
let vue = new Vue({
    el: '#app',
    data(){
        return {d: page_data, countries: countriesArray, states: [], ccode: "", cas: {c: "X", s: "X",}}
    },
    methods: {onCountryChoose: casCountry, onStatesChoose: casStates}
});

//add branch function
function casCountry(event) {
    let sN = event.target.value;
    let selected_states = countriesArray[sN].states;
    vue.$data.states = selected_states;
    vue.$data.cas.c = sN;
}
//states selected
function casStates(events) {
    let sN = event.target.value;
    vue.$data.cas.s = sN;
}