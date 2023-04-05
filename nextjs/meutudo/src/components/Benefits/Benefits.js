import React from "react"
import Image from 'next/image'

import style from './Benefits.module.scss'

const Benefits = ({ data }) => {
  return (
    <section className={style.benefits}>
      <div className="container">
        <div className="row">
          <div className="col-lg-6 offset-lg-3 text-center">
            {data.label && <span className="pre-title">{data.label}</span>}
            {data.title && <h3 className="title small black">{data.title}</h3>}
            {data.text && <p>{data.text}</p>}
          </div>
        </div>
        <div className={style.grid}>
          {data.blocks.map((item, index) => (
            <div className={style.box} key={index}>
              <Image
                src={require(`../../public/images/section_3_${index + 1}.webp`)}
                alt={item.title}
              />
              <span>{item.title}</span>
              <p>{item.text}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  )
}

export default Benefits