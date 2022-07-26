import React from "react";
import {Button, Grid, Typography} from "@mui/material";
import Logo from "../logo.svg";

const Question = () => {
  return(
    <div className="cerv">
  <Grid container
  className='black-theme'
  sx={{height: "100vh", width: '100%', margin: "0"}}
  >
    <Grid container 
      spacing={2}
      justifyContent="center"
      alignItems="center"
      alignSelf="center"
    >
    <Grid item xs={12} textAlign="center">
    <img src={Logo} alt="Logo" className="logo"/>
    </Grid>
    <Grid item xs={12}>
      <Typography textAlign="center">VOCÊ TEM MAIS DE 18 ANOS?</Typography>
    </Grid>
    <Grid item> 
      <Button  variant="contained" color="primary" size="large" sx={{padding: ".3rem 5rem"}} >Sim</Button>
    </Grid>
    <Grid item>
      <Button variant="contained" color="error" size="large" sx={{padding: ".3rem 5rem"}}>Não</Button>
    </Grid>
    <Grid item xs={12}>
      <Typography  textAlign="center">VOCÊ PRECISA TER MAIS DE 18 ANOS PARA ACESSAR ESTE SITE.</Typography>
    </Grid>
    </Grid>
  </Grid>
  </div>
  );
}
export default Question;
