function Soru(soruMetni, cevapSecenekleri, dogruCevap) {
    this.soruMetni = soruMetni;
    this.cevapSecenekleri = cevapSecenekleri;
    this.dogruCevap = dogruCevap;
}

Soru.prototype.cevabiKontrolEt = function(cevap){
    return cevap === this.dogruCevap;
}

let sorular = [
    new Soru("Algoritmanın tanımı aşağıdakilerden hangisi olabilir?", {a: "bir problemi çözmek veya bir görevi tamamlamak için izlenmesi gereken adımlardır. ", b: "bir bilgisayar programıdır. ", c: "ir programlama dilidir. ", d: "bilgisayar oyunlarına verilen isimdir."}, "a"),
    new Soru("Programlamanın tanımı aşağıdakilerden hangisi olabilir?", {a: "bilgisayar dili ile algoritmanızı bilgisayara anlatmaktır. ", b: "bir bilgisayar üretmeye denir. ", c: "matematik problemlerine denir. ", d: "bir sınav sistemidir."}, "a"),
    new Soru("Hangi etkinlik programlama kullanılarak gerçekleştirilebilir?", {a: 'Müzik dinleme', b: 'Yemek pişirme', c: 'Oyun yapma', d:'Spor yapma'}, "c"),
    new Soru("Programlama neden önemlidir?", {a: "Yaratıcılığı geliştirir ve hayal gücünü gerçeğe dönüştürme gücü verir. ", b: "Fiziksel egzersiz yapmaya yardımcı olur. ", c: "Sadece matematikle ilgilenenler için uygundur. ", d: "Sadece bir meslek seçeneği sunar."}, "a"),
];