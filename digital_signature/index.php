<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Title</title>
        <style>
            /* mengatur ukuran canvas tanda tangan  */
            canvas {
                border: 1px solid #ccc;
                border-radius: 0.5rem;
                width: 100%;
                height: 400px;
            }
        </style>
    </head>
    
    <body>
    
        <div class="container">
            <h1 class="alert alert-success mt-5 text-dark">
                Latihan Membuat Tanda Tangan Digital - sahretech.com
            </h1>
            <div class="card">
                <div class="card-header">
                    Form Tanda Tangan
                </div>
                <div class="card-body">
                    <!-- canvas tanda tangan  -->
                    <canvas id="signature-pad" class="signature-pad"></canvas>
    
                    <!-- tombol submit  -->
                    <div style="float: left;">
                        <button id="btn-submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
    
                    <div style="float: right;">
                        <!-- tombol ganti warna  -->
                        <button type="button" class="btn btn-success" id="change-color">
                            Change Color
                        </button>
    
                        <!-- tombol undo  -->
                        <button type="button" class="btn btn-dark" id="undo">
                            <span class="fas fa-undo"></span>
                            Undo
                        </button>
    
                        <!-- tombol hapus tanda tangan  -->
                        <button type="button" class="btn btn-danger" id="clear">
                            <span class="fas fa-eraser"></span>
                            Clear
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
        <script>
            // script di dalam ini akan dijalankan pertama kali saat dokumen dimuat
            document.addEventListener('DOMContentLoaded', function () {
                resizeCanvas();
            })
    
            //script ini berfungsi untuk menyesuaikan tanda tangan dengan ukuran canvas
            function resizeCanvas() {
                var ratio = Math.max(window.devicePixelRatio || 1, 1);
                canvas.width = canvas.offsetWidth * ratio;
                canvas.height = canvas.offsetHeight * ratio;
                canvas.getContext("2d").scale(ratio, ratio);
            }
    
    
            var canvas = document.getElementById('signature-pad');
    
            //warna dasar signaturepad
            var signaturePad = new SignaturePad(canvas, {
                backgroundColor: 'rgb(255, 255, 255)'
            });
    
            //saat tombol clear diklik maka akan menghilangkan seluruh tanda tangan
            document.getElementById('clear').addEventListener('click', function () {
                signaturePad.clear();
            });
    
            //saat tombol undo diklik maka akan mengembalikan tanda tangan sebelumnya
            document.getElementById('undo').addEventListener('click', function () {
                var data = signaturePad.toData();
                if (data) {
                    data.pop(); // remove the last dot or line
                    signaturePad.fromData(data);
                }
            });
    
            //saat tombol change color diklik maka akan merubah warna pena
            document.getElementById('change-color').addEventListener('click', function () {
    
                //jika warna pena biru maka buat menjadi hitam dan sebaliknya
                if(signaturePad.penColor == "rgba(0, 0, 255, 1)"){
    
                    signaturePad.penColor = "rgba(0, 0, 0, 1)";
                }else{
                    signaturePad.penColor = "rgba(0, 0, 255, 1)";
                }
            })
    
            //fungsi untuk menyimpan tanda tangan dengan metode ajax
            $(document).on('click', '#btn-submit', function () {
                var signature = signaturePad.toDataURL();
    
                $.ajax({
                    url: "proses.php",
                    data: {
                        foto: signature,
                    },
                    method: "POST",
                    success: function () {
                        location.reload();
                        alert('Tanda Tangan Berhasil Disimpan');
                    }
    
                })
            })
        </script>
    </body>
    
    </html>

