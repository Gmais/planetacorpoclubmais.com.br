<?php
/**
 * Template Name: Espaco do Aluno
 */

get_header(); ?>

<div class="btContentWrap btClear btStudentSpaceParent">
    <div class="btStudentSpaceBg" style="background-image: url('<?php echo content_url( '/uploads/espaco-aluno/academia-bg.png' ); ?>');"></div>
    <div class="port">
        <div class="btContent">
            <div class="btEspacoAluno">
                <div class="btPageTitleArea">
                    <h1 class="btPageTitle"><?php echo esc_html__( 'Espaço do Aluno', 'fitness-club' ); ?></h1>
                    <div class="btTitleSeparator"></div>
                </div>
                
                <div class="btIconsContainer">
                    <a href="https://agendaplanetacorpo.lovable.app/login" target="_blank" class="btAlunoIconItem">
                        <div class="btIconWrap">
                            <i class="fa fa-calendar-check-o"></i>
                        </div>
                        <h3><?php echo esc_html__( 'Agendamento da Avaliação Física', 'fitness-club' ); ?></h3>
                        <p><?php echo esc_html__( 'Marque seu horário com nossos profissionais.', 'fitness-club' ); ?></p>
                    </a>

                    <a href="#" class="btAlunoIconItem btNoLink">
                        <div class="btIconWrap">
                            <i class="fa fa-history"></i>
                        </div>
                        <h3><?php echo esc_html__( 'Meu Histórico Treino Monitorado', 'fitness-club' ); ?></h3>
                        <p><?php echo esc_html__( 'Acompanhe sua evolução e treinos passados.', 'fitness-club' ); ?></p>
                        <span class="btSoon"><?php echo esc_html__( '(Em breve)', 'fitness-club' ); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.btStudentSpaceParent {
    position: relative;
    overflow: hidden;
    min-height: 80vh;
    display: flex;
    align-items: center;
}

.btStudentSpaceBg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    filter: brightness(0.4) blur(3px);
    z-index: 0;
    transform: scale(1.1);
}

/* Cache Bust: v5.2 - Force Centering */
.btEspacoAluno {
    position: relative;
    z-index: 1;
    padding: 80px 20px;
    text-align: center !important;
    width: 100% !important;
    margin: 0 auto !important;
}

.btPageTitleArea {
    margin-bottom: 60px !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    text-align: center !important;
    width: 100% !important;
}

.btPageTitle {
    font-size: 48px !important;
    color: #ffffff !important;
    text-transform: uppercase !important;
    letter-spacing: 2px !important;
    margin-bottom: 15px !important;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5) !important;
    display: block !important;
    width: 100% !important;
}

.btTitleSeparator {
    width: 80px !important;
    height: 4px !important;
    background: #FF6F00 !important; /* Laranja vibrante */
    border-radius: 2px !important;
    margin: 0 auto !important; /* Force center */
}

.btIconsContainer {
    display: grid !important;
    grid-template-columns: 1fr 1fr !important; /* Precisely 50/50 */
    gap: 40px !important;
    max-width: 750px !important; /* Slightly adjusted */
    margin: 40px auto 0 !important;
    width: 100% !important;
    justify-content: center !important;
}

.btAlunoIconItem {
    padding: 50px 30px !important;
    background: rgba(255, 255, 255, 0.95) !important;
    border-radius: 20px !important;
    text-decoration: none !important;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    color: #222 !important;
    box-shadow: 0 15px 35px rgba(0,0,0,0.2) !important;
    backdrop-filter: blur(10px) !important;
    text-align: center !important;
    box-sizing: border-box !important;
    width: 100% !important;
}

.btAlunoIconItem:hover:not(.btNoLink) {
    transform: translateY(-15px);
    background: #ffffff;
    box-shadow: 0 25px 50px rgba(255, 111, 0, 0.3);
}

.btIconWrap {
    font-size: 80px;
    color: #FF6F00;
    margin-bottom: 30px;
    transition: transform 0.3s ease;
}

.btAlunoIconItem:hover .btIconWrap {
    transform: scale(1.1);
}

.btAlunoIconItem h3 {
    font-size: 24px;
    margin: 0 0 15px 0;
    font-weight: 700;
    line-height: 1.2;
}

.btAlunoIconItem p {
    font-size: 16px;
    color: #666;
    margin: 0;
}

.btNoLink {
    opacity: 0.7;
    cursor: default;
    background: rgba(255, 255, 255, 0.8);
    filter: grayscale(1);
}

.btSoon {
    display: inline-block;
    font-size: 13px;
    color: #FF6F00;
    margin-top: 15px;
    font-weight: 600;
    text-transform: uppercase;
    background: rgba(255, 111, 0, 0.1);
    padding: 4px 12px;
    border-radius: 20px;
}

@media (max-width: 768px) {
    .btIconsContainer {
        flex-direction: column;
        align-items: center;
    }
    .btPageTitle {
        font-size: 32px;
    }
}
</style>

<?php get_footer(); ?>
