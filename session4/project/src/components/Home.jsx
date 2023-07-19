import React, { Component } from 'react';
import Button from './Button';
import Card from './Card';
import Mobile from './Mobile';
import img1 from '../1.png.webp'
import img2 from '../2.png.webp'
import img4 from '../4.png.webp'
import Person from './Person';

export default class Home extends Component {
  render() {
    return (
        <>
          {/* <Mobile img={img1} />
          <Mobile img={img2} />
          <Mobile img={img4} /> */}
        {/* <Person /> */}

          <div className='dots-frame'>
              <div className='dot'></div>
          </div>
        </>
    );
  }
}
