<?php
namespace App\Http\Middleware;
use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class JWTMiddleware extends BaseMiddleware
{
  public function handle($request, Closure $next)
  {
    try {
      $user = JWTAuth::parseToken()->authenticate();
    } catch (Exception $e) {
      if ($e instanceof TokenInvalidException){
        return response()->json(['status' => 'Token is Invalid']);
      } else if ($e instanceof TokenExpiredException){
        return response()->json(['status' => 'Token has Expired']);
      } else{
        return response()->json(['status' => 'Authorization Token not found']);
      }
    }

      return $next($request);
  }
}