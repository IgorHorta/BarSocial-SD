package user;

import java.sql.SQLException;

import dao.BarSocialDao;
import order.Order;
import bean.JsonResponseBean;
import br.com.caelum.vraptor.Post;
import br.com.caelum.vraptor.Resource;
import br.com.caelum.vraptor.Result;
import br.com.caelum.vraptor.view.Results;

@Resource
public class UserController {
	
	public UserController(Result result){
		this.result = result;
	}
	
	private final Result result; 
	
	/*Realiza o login ou cadastro do usuario*/
	@Post
	public void signUp(User user) throws SQLException, InstantiationException, IllegalAccessException, ClassNotFoundException{
		if(user == null || user.getName() == null || user.getPassword() == null){ 
			this.result.use(Results.json()).withoutRoot().from(new JsonResponseBean<Object>(false, "Usu�rio Inv�lido")).serialize();
			this.result.nothing();
		}else{
			user = BarSocialDao.searchUser(user);
			result.use(Results.json()).withoutRoot().from(new JsonResponseBean<Object>(user)).recursive().serialize();
			
		}	
	}
	/*Metodo para realizar pedidos*/
	@Post
	public void makeOrder(Order order) throws InstantiationException, IllegalAccessException, ClassNotFoundException, SQLException{
		if(order == null || order.getName() == null){ 
			this.result.use(Results.json()).withoutRoot().from(new JsonResponseBean<Object>(false, "Pedido Inv�lido")).serialize();
			this.result.nothing();
		}else{
			order = BarSocialDao.makeAOrder(order);
			result.use(Results.json()).withoutRoot().from(new JsonResponseBean<Object>(order)).recursive().serialize();
		}
	}
	/*Confere o status de um pedido de certo usuario*/
	@Post
	public void checkOrderStatus(Order order) throws InstantiationException, IllegalAccessException, ClassNotFoundException, SQLException{
		if(order == null || order.getName() == null){
			this.result.use(Results.json()).withoutRoot().from(new JsonResponseBean<Object>(false, "Pedido Inv�lido")).serialize();
			this.result.nothing();
		}else{
			order = BarSocialDao.checkMyOrder(order);
			result.use(Results.json()).withoutRoot().from(new JsonResponseBean<Object>(order)).recursive().serialize();
		}
	}
	/*Confere o status de um pedido de certo usuario*/
	@Post
	public void getOrder() throws InstantiationException, IllegalAccessException, ClassNotFoundException, SQLException{
		Order order = BarSocialDao.getOrder();
		if(order == null || order.getName() == null){
			this.result.use(Results.json()).withoutRoot().from(new JsonResponseBean<Object>(false, "Sem pedidos")).serialize();
			this.result.nothing();
		}else{
			result.use(Results.json()).withoutRoot().from(new JsonResponseBean<Object>(order)).recursive().serialize();
		}	
	}
	/*Atualiza o status de um pedido*/
	@Post
	public void updateOrderStatus(Order order) throws InstantiationException, IllegalAccessException, ClassNotFoundException, SQLException{
		if(order == null){
			this.result.use(Results.json()).withoutRoot().from(new JsonResponseBean<Object>(false, "Pedido inv�lido")).serialize();
			this.result.nothing();
		}else{
			BarSocialDao.updateOrderStatus(order);
			result.use(Results.json()).withoutRoot().from(new JsonResponseBean<Object>(order)).recursive().serialize();
		}
	}
	
	
	
	
}