<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    
   <form name="latihan1" method="POST" onsubmit="return checkform(this)">
     
         <div>
          NIM
            <input type="text" id="txNIM" name="NIM">
         </div>
         <div>
          NAMA
            <input type="text" id="txNAMA" name="NAMA">
         </div>
         <div>
          JENIS KELAMIN
            <input type="radio" id="txJKEL" name="JKEL" value="L"> Laki-Laki
            <input type="radio" id="txJKEL" name="JKEL" value="P"> Perempuan
         </div>
         <div>
            JURUSAN
            <select name="JURUSAN" id="txJUR">
                <option value ="MTI">MTI</option>
                <option value ="SK">SK</option>
                <option value ="KAB">KAB</option>
                <option value ="DKV">DKV</option>
                <option value ="TIPAR">TIPAR</option>
            </select>
         </div>
         <div>
            HOBI
            <input type="checkbox" name="hobi_1"> Merayap
            <input type="checkbox" name="hobi_2"> sleep
            <input type="checkbox" name="hobi_3"> game
            <input type="checkbox" name="hobi_4"> Eat
         </div>
         <div>
            <button type="submit"> kirim data </button>
         </div>
    </form>
    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("NIM").value;
            let nama = f.namedItem("NAMA").value;
            let jkel = f.namedItem("JKEL").value;
            let jur = f.namedItem("JURUSAN").value;
            let h1 = f.namedItem("hobi_1").checked;
            let h2 = f.namedItem("hobi_2").checked;
            let h3 = f.namedItem("hobi_3").checked;
            let h4 = f.namedItem("hobi_4").checked;
            console.log("NiM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JKEL: "+jkel);
            console.log("JUR: "+jur);
            console.log("Merayap: "+h1);
            console.log("sleep: "+h2);
            console.log("game: "+h3);
            console.log("Eat: "+h4);
            
            return false;
        }
    </script>
</body>
</html>