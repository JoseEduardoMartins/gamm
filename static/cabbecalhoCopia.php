<div class="pre-cabecalho">
    <a href="#" class="link_WhatsApp"><img class="logo_WhatsApp" src="./static/icon/icon_whatsApp2.png" alt="Logo do whatsApp"> (48) 99134-0640</a>
</div>
<header> 
    <div class="cabecalho__item logo">
        <a class="itemLogo__link" href="#"><input class="itemLogo__img" type="image" src="<?php echo $urlIconeLogo; ?>"  name="botaocarrinho"></a>
    </div>   
    
    <div class="cabecalho__item pesquisar">
        <div class="CabecalhoItemPesquisa">
            <input class="itemPesquisar input" type="text" name="pesquisa" minlength="1" required placeholder="Oque você esta procurando?">
            <input class="itemPesquisar buttom" type="image" src="<?php echo $urlIconePesquisa; ?>"  name="botaoPesquisar">
        </div>
    </div>  
    <div class="cabecalho__item cadstroLogin">
        <a href="#" class="itemCadstroLogin "></a>
    </div>
</header>

<style>
/* cabecalho__item pesquisar */

.cabecalho__item.pesquisar{ 
    width: 40%;
    top: 20px;
}
.CabecalhoItemPesquisa{
    border: 1px solid #BDBDBD;
    border-radius: 40px;
    height: 40px;
    position: relative;
}
.itemPesquisar.input{
    border-radius: 40px;
    width: 100%;
    height: 40px;
    position: absolute;
    text-indent: 10px;
}
.itemPesquisar.input:focus, .itemPesquisar.buttom:focus{
    outline: 0;
}
.itemPesquisar.buttom{
    width: 30px;
    position: absolute;
    right: 10px;
    top: 5px;
}
</style>
