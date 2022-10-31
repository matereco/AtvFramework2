<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

/*private $produtos = [
    [
        'produto' => 'Red dead Redemption 2',
        'preco_unitario' => 200.00,
        'quantidade' => 50
    ],
    [
        'produto' => 'Spider Man Miles Morales',
        'preco_unitario' => 250.00,
        'quantidade' => 2
    ],
    [
        'produto' => 'Skyrim',
        'preco_unitario' => 130.90,
        'quantidade' => 100
    ],
    [
        'produto' => 'Fallout New Vegas',
        'preco_unitario' => 20.50,
        'quantidade' => 30
    ],
    [
        'produto' => 'Bioshock 2',
        'preco_unitario' => 75.50,
        'quantidade' => 25
    ],
    [
        'produto' => 'Dishonored',
        'preco_unitario' => 55.35,
        'quantidade' => 1
    ],
    [
        'produto' => 'Star Wars Battlefront ',
        'preco_unitario' => 251.20,
        'quantidade' => 1
    ]
];*/
class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarVendas()
    {

        $vendas = Venda::all();
        return view('produtos.listagemProdutos', ['vendas' => $vendas]);


        /*foreach($vendas as $venda){
            //echo "#Produtos#" . $venda->produto;
            echo"
            <tr>
            <td>$venda->produto<br>$venda->preco_unitario<br>$venda->quantidade
             </td></tr>";

        }*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verVenda($id)
    {
        print("ver");

        $vendas  = Venda::where('id','=',$id)->get();
        return view('produtos.listagemProdutos', ['vendas' => $vendas]);
        dd($vendas);



    }
    public function cadastrarVenda($produto, $preco, $quantidade)
    {
        $vendas  = new Venda();
        $vendas ->produto = $produto;
        $vendas ->preco_unitario = $preco;
        $vendas ->quantidade = $quantidade;
        $vendas ->save();
        dd($vendas);


    }
    public function atualizarVenda($id,$produto, $preco, $quantidade)
    {
        print("atualizar");
        $vendas  = Venda::find($id);
        $vendas ->produto = $produto;
        $vendas ->preco_unitario = $preco;
        $vendas ->quantidade = $quantidade;
        $vendas ->save();
        dd($vendas);

    }
    public function excluirVenda($id)
    {
        $vendas = Venda::find($id);
        $vendas ->delete();
        dd($vendas);


    }

}
