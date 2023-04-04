import React from "react"
import style from './Hero.module.scss'

const Hero = () => {

  return (

    <section className={style.hero}>
      <div className="container vh-100">
        <div className="row vh-100 align-items-center">
          <div className="col-lg-5">
            <h1 className={`title ${style.title}`}>A gente <span>transforma</span> o crédito no Brasil para que você tenha <strong>dinheiro mais barato na hora que precisar</strong></h1>
          </div>
        </div>
      </div>
    </section >
  )
}

export default Hero