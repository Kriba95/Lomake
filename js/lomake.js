function validateform(){  
    var nimi=document.myform.nimi.value;
    var loginid=document.myform.loginid.value;
    var salasana=document.myform.salasana.value;    
    var email=document.myform.email.value;  
    var osoite=document.myform.osoite.value;  
    var maa=document.myform.maa.value;  
    var postinumero=document.myform.postinumero.value;   
    var spuoli=document.myform.spuoli.value;
    var kieli=document.myform.kieli.value;
    var email=document.myform.email.value;  
    var atposition=email.indexOf("@");  
    var dotposition=email.lastIndexOf(".");   
    console.log(kieli)

    if(loginid.length<6){  
        alert("Käyttäjätunnus pitää olla vähintään 6 merkkiä");  
        return false;  
    }else if(salasana.length<6){  
        alert("Salasana pitää olla vähintään 6 merkkiä");  
        return false;  
    }else if (nimi==null || nimi==""){  
        alert("Nimi ei voi olla tyhjä");  
        return false;  
    }else if (osoite==null || osoite==""){  
        alert("Osoite ei voi olla tyhjä");  
        return false;
    }else if (isNaN(postinumero) || postinumero.length<5){  
        alert("Postinumerossa pitää olla 5 numeroa");  
        return false; 
    }else if (kieli=="Valitse kieli"){  
        alert("Valitse kieli");  
        return false;
    }else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
        alert("Sähköposti on väärää muotoa");  
        return false;  
    }else if (maa==="Valitse maa"){  
        alert("Valitse Maa");  
        return false;
    }else if (spuoli==null || spuoli==""){  
        alert("Valitse sukupuoli");  
        return false;
    } else alert("Kiitos että täytit kentät, ikävä kyllä niitä ei tallenneta! Hyvää päivän jatkoa!")
}  