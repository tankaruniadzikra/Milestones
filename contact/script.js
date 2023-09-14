document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Mencegah formulir untuk melakukan pengiriman bawaan

        // Mengambil nilai dari input
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;

        // Menampilkan data di konsol
        console.log("Name: " + name);
        console.log("Email: " + email);
        console.log("Message: " + message);

        // (Opsional) Mengosongkan formulir setelah pengiriman berhasil
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("message").value = "";
    });
});
