function setupQuantityButtons() {
    const increaseButton = document.getElementById("increaseQuantity");
    const decreaseButton = document.getElementById("decreaseQuantity");
    const quantityInput = document.querySelector("input[name='soluong']");

    increaseButton.addEventListener("click", function () {
        quantityInput.stepUp();
    });

    decreaseButton.addEventListener("click", function () {
        if (quantityInput.value > 1) {
            quantityInput.stepDown();
        }
    });
}

document.addEventListener("DOMContentLoaded", setupQuantityButtons);

