package interceptor;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import br.com.caelum.vraptor.InterceptionException;
import br.com.caelum.vraptor.Intercepts;
import br.com.caelum.vraptor.core.InterceptorStack;
import br.com.caelum.vraptor.interceptor.Interceptor;
import br.com.caelum.vraptor.resource.ResourceMethod;

@Intercepts
public class RequestInfoInterceptor implements Interceptor {
	
	private final HttpServletRequest request;
	private final HttpServletResponse response;
	
	public RequestInfoInterceptor (HttpServletRequest request, HttpServletResponse response) {
		this.request = request;
		this.response = response;
	}
	
	@Override
	public boolean accepts(ResourceMethod method) {
		return true;
	}

	@Override
	public void intercept(InterceptorStack stack, ResourceMethod method,
			Object obj) throws InterceptionException {
		
		response.setHeader("Access-Control-Allow-Origin", "*");
		stack.next(method, obj);
	}
}
