import React from "react"
import Image from 'next/image'

import style from './Benefits.module.scss'

const Benefits = () => {
  return (
    <section className={style.benefits}>
      <div className="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 text-center">
            <span class="pre-title">Vantagens</span>
            <h3 class="title small black">Vantagens</h3>
            <p>Somos contra grandes bancos, financeiras e intermediários que só querem lucrar com você. Nosso pensamento é diferente.</p>
          </div>
        </div>
        <div class={style.grid}>
          <div class={style.box}>
            <Image
              src={require('../../public/images/section_3_1.webp')}
              alt='MeuTudo'
            />
            <span>Rápido</span>
            <p>Pagamento via PIX a partir de 10 minutos.</p>
          </div>
          <div class={style.box}>
            <Image
              src={require('../../public/images/section_3_2.webp')}
              alt='MeuTudo'
            />
            <span>Seguro</span>
            <p>Regulamentado pelo Banco Central e com a melhor tecnologia antifraude.</p>
          </div>
          <div class={style.box}>
            <Image
              src={require('../../public/images/section_3_3.webp')}
              alt='MeuTudo'
            />
            <span>100% digital</span>
            <p>Via aplicativo ou site a melhor experiência onde e quando quiser.</p>
          </div>
          <div class={style.box}>
            <Image
              src={require('../../public/images/section_3_4.webp')}
              alt='MeuTudo'
            />
            <span>Humano</span>
            <p>Atendimento personalizado feito por gente que te ajuda de verdade.</p>
          </div>
          <div class={style.box}>
            <Image
              src={require('../../public/images/section_3_5.webp')}
              alt='MeuTudo'
            />
            <span>Econômico</span>
            <p>Taxas de juros até 30% mais baixas. O crédito mais barato do Brasil.</p>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Benefits