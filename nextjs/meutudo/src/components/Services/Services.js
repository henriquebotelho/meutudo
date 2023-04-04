import React from "react"
import Image from 'next/image'
import Link from 'next/link'

import style from './Services.module.scss'
import Benefits from "../Benefits/Benefits"
import Platform from "../Platform/Platform"

const Services = () => {
  return (
    <section className={style.services}>
      <div className="container">
        <div className="row">
          <div className="col-lg-3">
            <div className={`card ${style.card}`}>
              <div className="card-body">
                <Image
                  src={require('../../public/images/section_2_4.webp')}
                  alt='MeuTudo'
                />
                <h2>Empréstimo Consignado</h2>
                <p>para beneficiários do INSS e pagamento a partir de 10 minutos.</p>
              </div>
              <a href="##" className="button rounded">Simule Agora</a>
            </div>
          </div>
          <div className="col-lg-3">
            <div className={`card ${style.card}`}>
              <div className="card-body">
                <Image
                  src={require('../../public/images/section_2_3.webp')}
                  alt='MeuTudo'
                />
                <h2>Portabilidade do Consignado</h2>
                <p>livre-se de taxas abusivas e pague até 30% mais barato.</p>
              </div>
              <a href="#2" className="button rounded">Simule agora</a>
            </div>
          </div>
          <div className="col-lg-3">
            <div className={`card ${style.card}`}>
              <div className="card-body">
                <Image
                  src={require('../../public/images/section_2_2.webp')}
                  alt='MeuTudo'
                />
                <h2>Antecipação Saque-Aniversário FGTS</h2><p>antecipe seu saldo FGTS e realize o que quiser. Sem parcela mensal.</p>
              </div>
              <a href="#" className="button rounded">Simule</a>            </div>
          </div>
          <div className="col-lg-3">
            <div className={`card ${style.card}`}>
              <div className="card-body">
                <Image
                  src={require('../../public/images/section_2_1.webp')}
                  alt='MeuTudo'
                />
                <h2>Auxílio Brasil</h2><p>para beneficiários do Auxílio Brasil com uma das menores taxas do mercado.</p>
              </div>
              <a href="#" target="_blank" className="button rounded">Simule Agora</a>            </div>
          </div>
        </div>
      </div>

      <Benefits />
      <Platform />
    </section >
  )
}

export default Services