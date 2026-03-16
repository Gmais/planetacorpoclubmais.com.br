<?php
/**
 * Template Name: Espaco do Aluno
 */

get_header(); ?>

<div class="btContentWrap btClear">
    <div class="port">
        <div class="btContent">
            <div class="btEspacoAluno">
                <h1 class="btPageTitle">Espaço do Aluno</h1>
                
                <div class="btIconsContainer">
                    <a href="https://agendaplanetacorpo.lovable.app/login" target="_blank" class="btAlunoIconItem">
                        <div class="btIconWrap">
                            <i class="fa fa-calendar-check-o"></i>
                        </div>
                        <h3>Agendamento da Avaliação Física</h3>
                    </a>

                    <a href="#" class="btAlunoIconItem btNoLink">
                        <div class="btIconWrap">
                            <i class="fa fa-history"></i>
                        </div>
                        <h3>Meu Histórico Treino Monitorado</h3>
                        <span class="btSoon">(Em breve)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.btEspacoAluno {
    padding: 60px 0;
    text-align: center;
}
.btPageTitle {
    margin-bottom: 50px;
    font-size: 36px;
    color: #e65100; /* Laranja do tema */
}
.btIconsContainer {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
}
.btAlunoIconItem {
    flex: 1;
    max-width: 300px;
    padding: 40px 20px;
    background: #fdf2e9;
    border: 2px solid #e65100;
    border-radius: 15px;
    text-decoration: none !important;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #333 !important;
}
.btAlunoIconItem:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(230, 81, 0, 0.2);
    background: #ffffff;
}
.btIconWrap {
    font-size: 60px;
    color: #e65100;
    margin-bottom: 20px;
}
.btAlunoIconItem h3 {
    font-size: 20px;
    margin: 0;
    font-weight: 600;
}
.btNoLink {
    opacity: 0.8;
    cursor: default;
    border-style: dashed;
}
.btNoLink:hover {
    transform: none;
    box-shadow: none;
    background: #fdf2e9;
}
.btSoon {
    display: block;
    font-size: 14px;
    color: #888;
    margin-top: 10px;
}
@media (max-width: 768px) {
    .btIconsContainer {
        flex-direction: column;
        align-items: center;
    }
}
</style>

<?php get_footer(); ?>
