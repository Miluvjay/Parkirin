console.log("hao");

document.addEventListener("DOMContentLoaded", function () {
    const carButton = document.getElementById("carButton");
    const motorButton = document.getElementById("motorButton");
    const carIcon = document.getElementById("carIcon");
    const motorIcon = document.getElementById("motorIcon");
    const quotasMotor = document.getElementById("quotasMotor");
    const quotasMobil = document.getElementById("quotasMobil");
    const feeMotor = document.getElementById("feeMotor");
    const feeMobil = document.getElementById("feeMobil");
    motorIcon.style.display = "none";
    quotasMotor.style.display = "none";
    feeMotor.style.display = "none";
    carButton.classList.add("bg-[#13414D]", "hover:bg-[#155769]");
    carButton.classList.add("text-white");
   
    carButton.addEventListener("click", function () {
        this.classList.add("bg-[#13414D]", "hover:bg-[#155769]","text-white");
        // carButton.classList.add("text-white");
        motorButton.classList.remove("text-white");
        motorButton.classList.remove("bg-[#13414D]", "hover:bg-[#155769]");
        carIcon.style.display = "block";
        motorIcon.style.display = "none";
        quotasMobil.style.display = "block";
        quotasMotor.style.display = "none";
        feeMobil.style.display = "block";
        feeMotor.style.display = "none";
        // quotasInput.value = "150 parking";
    });

    motorButton.addEventListener("click", function () {
        this.classList.add("bg-[#13414D]", "hover:bg-[#155769]","text-white");
        // motorButton.classList.add("text-white", "hover:bg-[#155769]");   
        carButton.classList.remove("text-white");
        carButton.classList.remove("bg-[#13414D]", "hover:bg-[#155769]");
        carIcon.style.display = "none";
        motorIcon.style.display = "block";
        quotasMobil.style.display = "none";
        quotasMotor.style.display = "block";
        feeMobil.style.display = "none";
        feeMotor.style.display = "block";
        // quotasInput.value = "100 parking";
    });
});

$(document).ready(function () {
    $("#small-input").on("click", function () {
        $("#dropdown-list").toggleClass("hidden");
        $(".fa-chevron-down").toggleClass("rotate-180");
    });

    $("#dropdown-list li").on("click", function () {
        let selectedValue = $(this).data("value");
        $("#small-input").val(selectedValue);
        $("#dropdown-list").addClass("hidden");
        $(".fa-chevron-down").removeClass("rotate-180");
    });

    $(document).on("click", function (event) {
        if (!$(event.target).closest("#small-input").length) {
            $("#dropdown-list").addClass("hidden");
            $(".fa-chevron-down").removeClass("rotate-180");
        }
    });
});
// function toggleCard(index) {
//     console.log("toggle card " + index);
//     var cards = document.querySelectorAll(".card");
//     var contentContainer = document.querySelector(".content-container");

//     cards.forEach(function(card, i) {
//         if (i === index) {
//             card.classList.toggle("visible");
//         } else {
//             card.classList.remove("visible");
//         }
//     });
// }
function toggleCard(index) {
    console.log("toggle card " + index);
    var cards = document.querySelectorAll(".card");
    var contentContainer = document.querySelector(".content-container");

    cards.forEach(function(card, i) {
        if (i === index) {
            card.classList.toggle("visible");
        } else {
            card.classList.remove("visible");
        }
    });

    // Check if any card is visible
    var isVisible = Array.from(cards).some(function(card) {
        return card.classList.contains("visible");
    });

    // Enable or disable scrolling based on card visibility
    if (isVisible) {
        contentContainer.style.overflowY = "auto";
        contentContainer.style.maxHeight = "calc(100vh - 56px)";
    } else {
        contentContainer.style.overflowY = "hidden";
        contentContainer.style.maxHeight = "100%";
    }
}
const totalButton = document.getElementById("totalButton");
const divPayment = document.getElementById("divPayment");
let isHidden = true;
totalButton.addEventListener("click", function () {
    if (totalButton.style.display == "none") {
        totalButton.style.display = "block";
    } else {
        totalButton.style.display = "block";
        divPayment.style.display = "block";
    }
    isHidden = !isHidden;
});

document.addEventListener("DOMContentLoaded", function () {
    const copyIcon = document.getElementById("copyIcon");
    const messageTextarea = document.getElementById("message");

    copyIcon.addEventListener("click", function () {
        // Salin teks ke clipboard
        messageTextarea.select();
        document.execCommand("copy");

        // Tampilkan pesan "copy to clipboard" selama 2 detik
        const copyMessage = document.createElement("span");
        copyMessage.textContent = "Copied!"; // Change text to "Copied!"
        copyMessage.classList.add(
            "text-xs",
            "text-green-500", // Change text color to green
            "absolute",
            "top-0",
            "-mt-6",
            "right-0",
            "bg-white",
            "p-1",
            "rounded",
            "shadow",
            "dark:bg-gray-800"
        );
        this.parentNode.appendChild(copyMessage);

        setTimeout(() => {
            copyMessage.remove();
        }, 2000);
    });
});

let copyText = document.querySelector(".message");
copyText.querySelector(".copyIcon").addEventListener("click", function () {
    let input = copyText.querySelector(".copyIcon");
    input.select();
    document.execComand("copy");
    copyText.classList.add("active");
    window.getSelection().removeAllRanges();
    setTimeout(function () {
        copyText.classList.remove("active");
    }, 2500);
});

// document.getElementById("tampilPlat").addEventListener("click", function () {
//     const enterPlat = document.getElementById("enterPlat");
//     enterPlat.style.display = "none";

//     if (enterPlat.style.display === "none") {
//         enterPlat.style.display = "block";
//     } else {
//         enterPlat.style.display = "none";
//     }
// });
// const enterPlat = document.getElementById("enterPlat");
document.addEventListener("DOMContentLoaded", function () {
    const tampilPlat = document.getElementById("tampilPlat");
    const enterPlat = document.getElementById("enterPlat");

    enterPlat.classList.add("hidden");

    tampilPlat.addEventListener("click", function () {
        enterPlat.classList.remove("hidden");
    });
});

// function toggleButtonColor(clickedButton) {
//     // Remove blue background from all buttons
//     const allButtons = document.querySelectorAll('.me-2');
//     for (const button of allButtons) {
//       button.style.backgroundColor = '';
//     }

//     // Set blue background for the clicked button
//     clickedButton.style.backgroundColor = '#13414D';
//     clickedButton.style.color = 'white';
//   }
$(document).ready(function () {
    let number = 0; // Inisialisasi angka awal
    const min = 0;
    const max = 12;

    $('.arrow-up').click(function () {
        if (number < max) {
            number++;
            $('.number-display').text(number);
        }
    });

    $('.arrow-down').click(function () {
        if (number > min) {
            number--;
            $('.number-display').text(number);
        }
    });
});

function reloadPage(){
    location.reload(true);
}