function Soru(soruMetni, cevapSecenekleri, dogruCevap) {
    this.soruMetni = soruMetni;
    this.cevapSecenekleri = cevapSecenekleri;
    this.dogruCevap = dogruCevap;
}

Soru.prototype.cevabiKontrolEt = function(cevap){
    return cevap === this.dogruCevap;
}

let sorular = [
    new Soru("HTML nedir?", {a: "İnternet sayfalarının yapı taşıdır.", b: "E-postaları yönetmek için kullanılır. ", c: "Resim düzenleme programıdır. ", d: "Müzik dinlemek için kullanılır."}, "a"),
    new Soru("CSS ne işe yarar?", {a: "Web sayfalarını renklendirir ve düzenler. ", b: "Matematik problemlerini çözer. ", c: "Fotoğraf düzenleme yapar. ", d: "E-postaları gönderir ve alır."}, "a"),
    new Soru("Hangi etiket resim eklemek için kullanılır?", {a: '&lt;div&gt;', b: '&lt;a&gt;', c: '&lt;p&gt;', d:'&lt;img&gt;'}, "d"),
    new Soru("CSS ile hangi özellikleri değiştirebiliriz?", {a: "Yazı tipi ve boyutunu. ", b: "Sayfanın arka plan rengini. ", c: "Kenarlık ekleyebiliriz. ", d: "Hepsi."}, "d"),
];