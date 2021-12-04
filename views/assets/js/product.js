window.onload = function() {
    document.getElementById("download_pdf").addEventListener("click", () => {
        var receipt = this.document.getElementById("receipt");
        // var img = document.createElement("img");
        // img.scr = "assets/img/logo/logo2.png";
        //console.log(receipt);
        //console.log(window);
        var opt = {
            margin: [0, 0, 1, 0],
            //title: "Thank you",
            filename: 'receipt.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 20 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
        };

        //receipt = receipt.appendChild(logo);
        html2pdf().from(receipt).set(opt).save();
        // html2pdf().from(receipt).set(opt).toPdf().get('pdf').then(function(pdf) {
        //     //var totalPages = pdf.internal.getNumberOfPages();

        //     //for (i = 1; i <= totalPages; i++) {
        //     pdf.setPage(1);
        //     pdf.addImage(logo, "PNG", 0, 0, 200, 200);
        //     //}
        // }).save();
    })
}

function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
}