

function obtenerSlide(){
           $.ajax({
               url: "metadatos/presentacion.xml",
               dataType: "xml",
               success: function(data) {

                   $(data).find("metadoc").each(function(){
                       var urldoc = $(this).find("url").text();
                      // Asynchronously download PDF as an ArrayBuffer
                       //

                       PDFJS.getDocument(urldoc).then(function getPdfHelloWorld(_pdfDoc) {
                       pdfDoc = _pdfDoc;
                       renderPage(pageNum);
                       document.onkeyup = handleArrowKeys;
                       });

                   })
               }
           });
       }


       //
       // NOTE:
       // Modifying the URL below to another server will likely *NOT* work. Because of browser
       // security restrictions, we have to use a file server with special headers
       // (CORS) - most servers don't support cross-origin browser requests.
       //



       //
       // Disable workers to avoid yet another cross-origin issue (workers need the URL of
       // the script to be loaded, and currently do not allow cross-origin scripts)
       //
       PDFJS.disableWorker = true;

       var pdfDoc = null,
         pageNum = 1,
         scale = 0.8,
         canvas = document.getElementById('the-canvas'),
         ctx = canvas.getContext('2d');

       //
       // Get page info from document, resize canvas accordingly, and render page
       //
       function renderPage(num) {
       // Using promise to fetch the page
       pdfDoc.getPage(num).then(function(page) {
         var viewport = page.getViewport(scale);
         canvas.height = viewport.height;
         canvas.width = viewport.width;

         // Render PDF page into canvas context
         var renderContext = {
           canvasContext: ctx,
           viewport: viewport
         };
         page.render(renderContext);
       });

       // Update page counters
       document.getElementById('page_num').textContent = pageNum;
       document.getElementById('page_count').textContent = pdfDoc.numPages;
       }

       //
       // Go to previous page
       //
       var prev= document.getElementById("prev");
       var next= document.getElementById("next");

       prev.addEventListener("click",function(){
       if (pageNum <= 1)
         return;
       pageNum--;
       renderPage(pageNum);
       } )


       //
       // Go to next page
       //
       next.addEventListener("click",function() {
        if (pageNum >= pdfDoc.numPages)
          return;
        pageNum++;
        renderPage(pageNum);
        } )




$(document).ready(function(){
  obtenerSlide();
});
