// navbar
document.addEventListener("DOMContentLoaded", function () {
    const underlineLinks = document.querySelectorAll(".underline");

    underlineLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            underlineLinks.forEach(link => link.classList.remove("active"));
            link.classList.add("active");

            const category = link.getAttribute("data-category");
            // Do something with the category
        });
    });
});


// mobile menu
const buttons = [...document.querySelectorAll("nav button")];

const closeAll = () => {
	buttons.forEach((button) => {
		button.classList.remove("active");
	});
};

buttons.forEach((button) => {
	button.onclick = () => {
		closeAll();
		button.classList.add("active");
	};
});


