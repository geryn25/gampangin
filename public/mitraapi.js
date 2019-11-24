

function getmitra() {
  const Http = new XMLHttpRequest();
const url='https://delibot.000webhostapp.com/mitra';
Http.open("GET", url);
Http.send();

Http.onreadystatechange = (e) => {
  console.log(Http.responseText)
}

}