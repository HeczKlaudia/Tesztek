$(function () {
    const token = $('meta[name="csrf-token"]').attr("content");
    const myAjax = new MyAjax(token);

    const kerdesek = [];
    const kategoriak = [];

    let apiVegpont = "/api/tesztek";
    let kategoriaVegpont = "/api/kategoria";

    const szuloElem = $(".kerdes1");
    const sablonElem = $(".valaszDoboz1 .valaszDoboz2");

    szuloElem.empty();
    myAjax.getAdat(apiVegpont, kerdesek, listazas);
    myAjax.getAdat(kategoriaVegpont, kategoriak, Kategoria.kategoriaFeltolt);

    function listazas() {
        szuloElem.show();

        kerdesek.forEach(function (elem) {
            const ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujKerdes = new TesztKerdes(ujElem, elem);
        });
        sablonElem.hide();
    }

class Kategoria {
    constructor(myAjax) {
        this.myAjax = myAjax;
        this.kategorianev = $("#kategoriak");
       // this.kategoriaFeltolt(kategoriak);
    }
    
    kategoriaFeltolt(kategoriak) {
        let option = "";
        kategoriak.forEach(function (elem) {
            option =
            "<option value='" +
            elem.id +
            "'>" +
            elem.kategorianev +
            "</option>";
            $("#kategoriak").append(option);
        });
    }
}

});