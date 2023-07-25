import React from 'react'
import {useForm} from 'react-hook-form'
export default function Register() {
    const {register,handleSubmit} = useForm();
    return (
        <>
            <div className='container'>
                <div className='row'>
                    <form className='col-md-6' onSubmit={handleSubmit(send)}>
                        <div className="mb-3">
                            <label className="form-label">Email address</label>
                            <input {...register('email')} type="email" className="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                            <div id="emailHelp" className="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div className="mb-3">
                            <label  className="form-label">Password</label>
                            <input {...register('password')} type="password" className="form-control" id="exampleInputPassword1" />
                        </div>
                        <div className="mb-3 form-check">
                            <input type="checkbox" className="form-check-input" id="exampleCheck1" />
                            <label className="form-check-label" >Check me out</label>
                        </div>
                        <button type="submit" className="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </>
    )

    function send(data){
        console.log(data)
    }
}
