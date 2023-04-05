import React from "react"
import style from './Hero.module.scss'

const Hero = ({data}) => {
  return (

    <section className={style.hero}>
      <div className="container vh-100">
        <div className="row vh-100 align-items-center">
          <div className="col-lg-5">
            <h1 className={`title ${style.title}`} dangerouslySetInnerHTML ={{ __html: data.text_1 }} />
          </div>
        </div>
      </div>
    </section >
  )
}

export default Hero