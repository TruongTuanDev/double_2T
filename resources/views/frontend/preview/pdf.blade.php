<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview PDF</title>
    <script src="node_modules/pdfjs-dist/build/pdf.min.js"></script>
    <script src="node_modules/pdfjs-dist/build/pdf.worker.min.js"></script>
</head>
<body>
  <div id="pdfViewer"></div>
  <script>
  // Đường dẫn đến tệp PDF của bạn
  const pdfPath = '{{ asset($pdfPath) }}';

  // Lấy phần tử div để hiển thị PDF
  const container = document.getElementById('pdfViewer');

  // Tải tệp PDF và hiển thị nó trong phần tử div
  pdfjsLib.getDocument(pdfPath).then(pdfDoc => {
    // Mở trang đầu tiên của PDF
    pdfDoc.getPage(1).then(page => {
      const canvas = document.createElement('canvas');
      container.appendChild(canvas);

      // Thiết lập kích thước canvas phù hợp với kích thước trang PDF
      const viewport = page.getViewport({ scale: 1.5 });
      canvas.height = viewport.height;
      canvas.width = viewport.width;

      // Render trang PDF lên canvas
      const renderContext = {
        canvasContext: canvas.getContext('2d'),
        viewport: viewport,
      };
      page.render(renderContext);
    });
  });
</script>
</body>
</html>