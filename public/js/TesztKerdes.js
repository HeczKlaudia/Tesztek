class TesztKerdes {
    constructor(elem, adat) {
        this.elem = elem;
        this.adat = adat;

        this.kerdes1 = this.elem.find('.kerdes1');
        this.valasz1 = this.elem.find('.valasz1');
        this.valasz2 = this.elem.find('.valasz2');
        this.valasz3 = this.elem.find('.valasz3');
        this.valasz4 = this.elem.find('.valasz4');

        this.setAdat(adat);
    }

    setAdat(adat) {
        this.adat = adat;
        this.kerdes1.text(adat.kerdes);
        this.valasz1.text(adat.v1);
        this.valasz2.text(adat.v2);
        this.valasz3.text(adat.v3);
        this.valasz4.text(adat.v4);
    }
}