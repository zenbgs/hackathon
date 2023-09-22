<script>


function notify(e) {
    var t = document.querySelector("body"),
        a = document.createElement("div");
    a.classList.add("alert", "position-absolute", "top-0", "border-0", "text-white", "w-50", "end-0", "start-0", "mt-2",
            "mx-auto", "py-2"),
        a.classList.add("alert-" + e.getAttribute("data-type")),
        a.style.transform = "translate3d(0px, 0px, 0px)",
        a.style.opacity = "0",
        a.style.transition = ".35s ease",
        setTimeout(function() {
            a.style.transform = "translate3d(0px, 20px, 0px)",
                a.style.setProperty("opacity", "1", "important")
        }, 100),
        a.innerHTML = '<div class="d-flex mb-1"><div class="alert-icon me-1"><i class="' + e.getAttribute("data-icon") +
        ' mt-1"></i></div><span class="alert-text"><strong>' + e.getAttribute("data-title") +
        '</strong></span></div><span class="text-sm">' + e.getAttribute("data-content") + "</span>",
        t.appendChild(a),
        setTimeout(function() {
            a.style.transform = "translate3d(0px, 0px, 0px)",
                a.style.setProperty("opacity", "0", "important")
        }, 4e3),
        setTimeout(function() {
            e.parentElement.querySelector(".alert").remove()
        }, 4500)
}
</script>