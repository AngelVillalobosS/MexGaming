// Validación en tiempo real mientras interactúa
liderSelect.addEventListener("blur", function () {
    if (this.value === "" && this.hasAttribute("data-touched")) {
        errorMessage.style.display = "block";
        this.parentElement.classList.add("error");
    }
});

liderSelect.addEventListener("input", function () {
    this.setAttribute("data-touched", "true");
});
