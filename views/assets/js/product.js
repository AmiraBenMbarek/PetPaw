var dropdown = document.getElementsByClassName("dropdown_btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

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