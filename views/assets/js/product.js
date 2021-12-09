window.onload = function() {
    document.getElementById("download_pdf").addEventListener("click", () => {
        var receipt = this.document.getElementById("receipt");
        var opt = {
            margin: [0, 0, 1, 0],
            filename: 'receipt.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 20 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
        };

        html2pdf().from(receipt).set(opt).save();
    })
}