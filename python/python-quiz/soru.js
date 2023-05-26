function Soru(soruMetni, cevapSecenekleri, dogruCevap) {
    this.soruMetni = soruMetni;
    this.cevapSecenekleri = cevapSecenekleri;
    this.dogruCevap = dogruCevap;
}

Soru.prototype.cevabiKontrolEt = function(cevap){
    return cevap === this.dogruCevap;
}

let sorular = [
    new Soru("Python'da hangi kelimeyi kullanarak ekrana bir metin yazdırabilirsiniz?", {a: "input", b: "output ", c: "print ", d: "display"}, "c"),
    new Soru("Hangi matematiksel işlemi Python'da '*' sembolüyle ifade edersiniz?", {a: "Toplama ", b: "Çıkarma ", c: "Çarpma ", d: "Bölme"}, "c"),
    new Soru("Hangi kod parçası, kullanıcıdan bir sayı girmesini ister?", {a: 'input("Lütfen bir sayı giriniz: ")', b: 'print("Lütfen bir sayı giriniz: ")', c: 'output("Lütfen bir sayı giriniz: ")', d:'display("Lütfen bir sayı giriniz: ")'}, "a"),
    new Soru("Python'da hangi kelimeyi kullanarak, bir sayının karesini alabilirsiniz?", {a: "pow ", b: "sqrt ", c: "square ", d: "sqr"}, "a"),
];