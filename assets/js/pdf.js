var url = "uploads/documento.pdf"; 

pdfjsLib.getDocument(url).promise.then(function (pdf) {
    pdf.getPage(1).then(function (page) {
        var scale = 1.5;
        var viewport = page.getViewport({ scale: scale });

        var canvas = document.createElement("canvas");
        var context = canvas.getContext("2d");
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        document.getElementById("visorPDF").appendChild(canvas);

        var renderContext = {
            canvasContext: context,
            viewport: viewport
        };
        page.render(renderContext);
    });
});
