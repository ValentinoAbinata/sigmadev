AOS.init({
duration: 1500,
once: false,
loop: true
});

// Modal Hubungi Kami
const modal = document.getElementById("hubKami");
const hubKamiBTN = document.getElementById("hubKamiBTN");
const close = document.getElementById("close");

hubKamiBTN.addEventListener("click", () => {
modal.classList.remove("hidden");
});

close.addEventListener("click", () => {
modal.classList.add("hidden");
});

window.addEventListener("click", (e) => {
if (e.target === modal) {
    modal.classList.add("hidden");
}
});

// Modal Notifikasi
const notif = document.getElementById("notif");
const closeNotif = document.getElementById("closeNotif");

closeNotif.addEventListener("click", () => {
notif.classList.add("hidden");

const newUrl = window.location.origin + window.location.pathname;
window.history.replaceState({}, document.title, newUrl);
});

