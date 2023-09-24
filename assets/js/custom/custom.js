fotoShw = (event) => {
  document.getElementById("foto").src = URL.createObjectURL(
    event.target.files[0]
  );

  let fi = document.getElementById("upload-photo");
  let filemui = document.getElementById("upload-photo");

  if (/(\.jpg|\.jpeg|\.png|\.pdf)$/i.test(filemui.files[0].name) === false) {
    document.getElementById("upload-photo").value = "";
    document.getElementById("foto").src = "";
    swal({
      icon: "info",
      title: "Form Gambar",
      text: "File harus berformat gambar & pdf",
    });
    return false;
  } else {
    if (fi.files.length > 0) {
      for (var i = 0; i <= fi.files.length - 1; i++) {
        var fsize = fi.files.item(i).size;
        const file = Math.round(fsize / 1024);
        if (file > 1024) {
          document.getElementById("upload-photo").value = "";
          document.getElementById("foto").src = "";
          swal({
            icon: "info",
            title: "Form Gambar",
            text: "File harus kurang dari 1024kb",
          });
        } else {
          if (
            document.getElementById("foto").src != null ||
            document.getElementById("foto").src != ""
          ) {
            // document.getElementById("btnclear").classList.remove("sembunyi");
          }
        }
      }
    }
  }
};
