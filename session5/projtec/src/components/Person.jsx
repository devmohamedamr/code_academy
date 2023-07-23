import React, { Component } from 'react';
import img from '../img/member-3.jpg.webp'
export default class Person extends Component {
  render() {
    return (
      <>
        <div className='person'>
            <img src={img} />
            <div className='person-social'></div>
            <div className='person-info'></div>
        </div>
      </>
    );
  }
}
