import React from "react"
import Image from 'next/image'

import style from './Purpose.module.scss'

const Purpose = () => {
  return (

    <section className={style.purpose}>
      <div className="container">
        <div className="row justify-content-around align-items-center">
          <div className="col-lg-5">
            <span className="pre-title">Propósito</span>
            <h3 className="title small black">Melhorar a vida financeira dos brasileiros</h3>
            <p className="pt-4 mb-0">Temos mais de R$ 2 bilhões em investimento para oferecermos as menores taxas a você.</p>
            <a href="https://meutudo.com.br" target="_blank" className="button rounded">Simule agora</a>
          </div>
          <div className="col-lg-6">
            <Image
              src={require('../../public/images/section_5_1.webp')}
              alt='MeuTudo'
            />
          </div>
        </div>
      </div>
    </section>
  )
}

export default Purpose