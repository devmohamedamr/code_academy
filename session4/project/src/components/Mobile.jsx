import React, { Component } from 'react';
export default class Mobile extends Component {
  render() {
    return (
        <>
            <div className='box'>
                <img src={this.props.img} />
                <div className='circle'></div>
            </div>
        </>
    );
  }
}
