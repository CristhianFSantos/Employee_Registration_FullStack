document.addEventListener("DOMContentLoaded", () => {
  const button = document.getElementById("btn__cancel");
  button.addEventListener("click", clearForm);
});

function clearForm() {
  console.log("teste");
  window.location.href = "http://localhost:8080/index.html";
  // document.querySelector(".sex").value = "";
}
