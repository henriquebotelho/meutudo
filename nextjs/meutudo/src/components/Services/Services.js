import React from "react"
import Image from 'next/image'
import Link from 'next/link'

import style from './Services.module.scss'
import Benefits from "../Benefits/Benefits"
import Platform from "../Platform/Platform"

const Services = ({ data }) => {
  const services = data.services.blocks
  return (
    <section className={style.services}>
      <div className="container">
        <div className="row">
          {services.map((item, index) => (
            <div className="col-lg-3" key={index}>
              <div className={`card ${style.card}`}>
                <div className="card-body">
                  <Image
                    src={require(`../../public/images/section_2_${index + 1}.webp`)}
                    alt={item.title}
                  />
                  <h2>{item.title}</h2>
                  <p>{item.text}</p>
                </div>
                <a href="#" className="button rounded">Simule Agora</a>
              </div>
            </div>
          ))}
        </div>
      </div>

      <Benefits data={data.benefits} />
      <Platform data={data.platform} />
    </section >
  )
}

export default Services