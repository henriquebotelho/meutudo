import React from "react"
import Image from 'next/image'

import style from './Purpose.module.scss'

const Purpose = ({ data }) => {
  return (

    <section className={style.purpose}>
      <div className="container">
        <div className="row justify-content-around align-items-center">
          <div className="col-lg-5">
            {data.label && <span className="pre-title">{data.label}</span>}
            {data.title && <h3 className="title small black">{data.title}</h3>}
            {data.text && <p className="pt-4 mb-0">{data.text}</p>}
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