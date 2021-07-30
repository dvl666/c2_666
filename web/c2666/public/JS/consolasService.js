

const getDatos = async ()=>{
    let resp = await axios.get("api/666/get");
    return resp.data;
};

const crearDatos = async(datos)=>{
    let resp = await axios.post("api/616/post", datos, {
        'Content-Type': 'application/json'
    });
    return resp.data
}
