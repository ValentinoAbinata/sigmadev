document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const confirmButton = document.getElementById("confirmButton");
    const realSubmitButton = document.getElementById("realSubmitButton");
    const imageInput = document.getElementById("image"); // Input file gambar

    // Menangani tombol submit yang sebenarnya
    form.addEventListener("submit", function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            Swal.fire({
                title: "Form tidak lengkap!",
                text: "Mohon pastikan semua kolom yang wajib diisi telah terisi dengan benar.",
                icon: "error",
                confirmButtonText: "Tutup"
            });
        }
        if (!imageInput.files.length) {
            event.preventDefault();
            Swal.fire({
                title: "Gambar Wajib Di-upload!",
                text: "Mohon pilih file gambar untuk di-upload.",
                icon: "error",
                confirmButtonText: "Tutup"
            });
        }
    });

    confirmButton.addEventListener("click", function (event) {
        // Mencegah pengiriman formulir langsung
        event.preventDefault();

        // Menampilkan SweetAlert jika form valid
        if (form.checkValidity() && imageInput.files.length > 0) {
            Swal.fire({
                title: "Terima Kasih telah mengisi form!",
                text: "Silahkan hubungi Admin pada 'Tentang kami'.",
                icon: "success",
                confirmButtonText: "Kembali ke Beranda",
                customClass: {
                    confirmButton: "swal-confirm-button",
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Klik tombol submit yang sebenarnya
                    realSubmitButton.click();
                }
            });
        } else {
            if (!form.checkValidity()) {
                Swal.fire({
                    title: "Form tidak lengkap!",
                    text: "Mohon pastikan semua kolom yang wajib diisi telah terisi dengan benar.",
                    icon: "error",
                    confirmButtonText: "Tutup",
                    customClass: {
                        confirmButton: "galatB"
                    }
                });
            } else {
                Swal.fire({
                    title: "Gambar Wajib Di-upload!",
                    text: "Mohon pilih file gambar untuk di-upload.",
                    icon: "error",
                    confirmButtonText: "Tutup",
                    customClass: {
                        confirmButton: "galatB"
                    }
                });
                
            }
        }
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const imageInput = document.getElementById("image");
    const uploadLabel = document.querySelector("label[for='image'] span");

    imageInput.addEventListener("change", function() {
        const fileName = this.files.length > 0 ? this.files[0].name : "Upload File";
        uploadLabel.textContent = fileName;
    });
});