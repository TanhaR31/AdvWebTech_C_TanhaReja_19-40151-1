import { BrowserRouter, Route, Switch } from "react-router-dom";
import Register from "./Components/Register"
import Home from "./Components/Home"
import Login from "./Components/Login";
import SellerProductList from "./Components/SellerProductList";
import SellerProductAdd from "./Components/SellerProductAdd";
import SellerProductUpdate from "./Components/SellerProductUpdate";
import SellerProductDelete from "./Components/SellerProductDelete";
import axios from "axios";

function App() {

    return (

        <BrowserRouter>

            <div className="wrapper">

                <Switch>

                    <Route exact path="/">

                        <Login />

                    </Route>

                    <Route exact path="/login">

                        <Login />

                    </Route>

                    <Route exact path="/register">

                        <Register />

                    </Route>

                    <Route path="/home">

                        <Home />

                    </Route>

                    <Route path="/product/list">

                        <SellerProductList />

                    </Route>

                    <Route path="/product/add">

                        <SellerProductAdd />

                    </Route>

                    <Route path="/product/update">

                        <SellerProductUpdate />

                    </Route>

                    <Route path="/product/delete">

                        <SellerProductDelete />

                    </Route>

                </Switch>

            </div>

        </BrowserRouter>

    );

}



export default App;