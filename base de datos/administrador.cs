using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Clinica
{
    #region Administrador
    public class Administrador
    {
        #region Member Variables
        protected int _CEDULA;
        protected string _NOMBRE;
        protected string _USER;
        protected string _PW;
        protected string _EMAIL;
        #endregion
        #region Constructors
        public Administrador() { }
        public Administrador(string NOMBRE, string USER, string PW, string EMAIL)
        {
            this._NOMBRE=NOMBRE;
            this._USER=USER;
            this._PW=PW;
            this._EMAIL=EMAIL;
        }
        #endregion
        #region Public Properties
        public virtual int CEDULA
        {
            get {return _CEDULA;}
            set {_CEDULA=value;}
        }
        public virtual string NOMBRE
        {
            get {return _NOMBRE;}
            set {_NOMBRE=value;}
        }
        public virtual string USER
        {
            get {return _USER;}
            set {_USER=value;}
        }
        public virtual string PW
        {
            get {return _PW;}
            set {_PW=value;}
        }
        public virtual string EMAIL
        {
            get {return _EMAIL;}
            set {_EMAIL=value;}
        }
        #endregion
    }
    #endregion
}