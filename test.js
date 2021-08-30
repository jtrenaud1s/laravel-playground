


const page = {
  "name": "oiubnaeqsdfoigub",
  "template_id": 4
}

axios.post("http://localhost/api/page/store", page)
    .then((response) => response.json())
    .then((data) => console.log("This is your data", data));
