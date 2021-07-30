
const cargarMed = async()=>{
    let r = await axios.get("api/med/get");
    let med = r.data;
    let medSelect = document.querySelector("#med-select");
    med.forEach(element => {
        let o = document.createElement("option");
        o.innerText = element;
        medSelect.appendChild(o);        
    });
    
};

const cargarTmed = async()=>{
    let r = await axios.get("api/tmed/get");
    let med = r.data;
    let medSelect = document.querySelector("#tmed-select");
    med.forEach(element => {
        let o = document.createElement("option");
        o.innerText = element;
        medSelect.appendChild(o);        
    });
    
};

cargarMed();
cargarTmed();