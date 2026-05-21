// script.js

document.addEventListener("DOMContentLoaded", function () {

    // ================= ФОРМА ЗАКАЗА (order.html) =================
    const orderForm = document.getElementById("orderForm");
    if (orderForm) {
        const modalEl = document.getElementById("resultModal");
        const modalText = document.getElementById("modalText");
        const modal = new bootstrap.Modal(modalEl);

        orderForm.addEventListener("submit", function (event) {
            event.preventDefault();

            const name = orderForm.querySelector("input[type='text']").value.trim();
            const email = orderForm.querySelector("input[type='email']").value.trim();
            const phone = orderForm.querySelector("input[type='tel']").value.trim();
            const museum = orderForm.querySelector("select").value;

            const nameValid = name.length > 0;
            const emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            const phoneValid = phone.replace(/\D/g, "").length >= 10;

            if (nameValid && emailValid && phoneValid) {
                modalText.innerText = "Форма успешно отправлена!";
                console.log({ name, email, phone, museum });
            } else {
                modalText.innerText = "Ошибка: проверьте корректность данных";
                console.log("Ошибка в данных формы", { name, email, phone, museum });
            }

            modal.show();

            setTimeout(() => {
                document.querySelector("#resultModal .btn").focus();
            }, 200);
        });
    }

    // ================= ПОИСК МУЗЕЕВ (catalog.html) =================
    const searchInput = document.getElementById("search");
    if (searchInput) {
        const cards = document.querySelectorAll(".museum-card");

        searchInput.addEventListener("input", function () {
            const query = searchInput.value.toLowerCase();

            cards.forEach(card => {
                const title = card.querySelector("h5").textContent.toLowerCase();
                // Для Bootstrap сетки display пустое для показа, "none" для скрытия
                card.style.display = title.includes(query) ? "" : "none";
            });
        });
    }

    // ================= ДИНАМИКА MUSEUM.HTML =================
    const museumMain = document.querySelector("main.container");
    if (museumMain) {
        const params = new URLSearchParams(window.location.search);
        const museumParam = params.get("museum");

        if (museumParam) {
            const museums = {
                louvre: {
                    name: "Лувр (Париж)",
                    img: "img/louvre.jpg",
                    desc: "Лувр — крупнейший художественный музей мира, расположенный в Париже."
                },
                hermitage: {
                    name: "Эрмитаж",
                    img: "img/hermitage.jpg",
                    desc: "Эрмитаж — один из крупнейших музеев искусства и культуры, находится в Санкт-Петербурге."
                },
                british: {
                    name: "Британский музей",
                    img: "img/british.jpg",
                    desc: "Британский музей — крупнейший музей истории и культуры в Лондоне."
                },
                metropolitan: {
                    name: "Метрополитен",
                    img: "img/metropolitan.jpg",
                    desc: "Метрополитен — один из крупнейших художественных музеев Нью-Йорка."
                }
            };

            if (museums[museumParam]) {
                const data = museums[museumParam];
                const colImg = museumMain.querySelector("div.col-md-6 img");
                const colText = museumMain.querySelector("div.col-md-6 h2");
                const colDesc = museumMain.querySelector("div.col-md-6 p");

                if (colImg) colImg.src = data.img;
                if (colText) colText.textContent = data.name;
                if (colDesc) colDesc.textContent = data.desc;
            }
        }
    }

    // ================= АНАЛИТИКА (клики по кнопкам) =================
    document.addEventListener("click", function (event) {
        if (event.target.tagName === "BUTTON") {
            console.log("Нажата кнопка:", event.target.innerText);
        }
    });

});